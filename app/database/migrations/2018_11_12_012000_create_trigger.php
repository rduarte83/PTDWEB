<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE OR REPLACE FUNCTION f_password() RETURNS trigger AS $$
                BEGIN
                    NEW.password := crypt(NEW.password, gen_salt(\'bf\', 8));
                    RETURN NEW;
                END;
                $$ LANGUAGE plpgsql SECURITY DEFINER;
            CREATE TRIGGER t_password BEFORE INSERT OR UPDATE OF password ON utilizadores FOR EACH ROW EXECUTE PROCEDURE f_password();         
        ');

        DB::unprepared('
            CREATE OR REPLACE FUNCTION f_activeUser() RETURNS integer AS $$
                DECLARE activeuser int := 0; 
                BEGIN 
                    RETURN activeuser; 
                END 
            $$ LANGUAGE plpgsql SECURITY DEFINER;
            
            CREATE OR REPLACE FUNCTION f_logs() RETURNS trigger AS $$
                DECLARE activeuser int:= (SELECT f_activeuser());
                BEGIN
                    IF TG_OP = \'INSERT\' THEN
                    INSERT INTO logs (tab, op, utilizador, new) VALUES (TG_RELNAME, TG_OP, activeuser, row_to_json(NEW));
                    RETURN NEW;
                ELSIF   TG_OP = \'UPDATE\' THEN
                    INSERT INTO logs (tab, op, utilizador, new, old)
                    VALUES (TG_RELNAME, TG_OP, activeuser, row_to_json(NEW), row_to_json(OLD));
                    RETURN NEW;
                ELSIF   TG_OP = \'DELETE\' THEN
                    INSERT INTO logs (tab, op, utilizador, old)
                    VALUES (TG_RELNAME, TG_OP, activeuser, row_to_json(OLD));
                    RETURN OLD;
                END IF;
            END;
            $$ LANGUAGE plpgsql SECURITY DEFINER;
        ');

        DB::unprepared('
            CREATE TRIGGER logs_migrations BEFORE INSERT OR UPDATE OR DELETE ON migrations FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_users BEFORE INSERT OR UPDATE OR DELETE ON users FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_password_resets BEFORE INSERT OR UPDATE OR DELETE ON password_resets FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_admin_role_menu BEFORE INSERT OR UPDATE OR DELETE ON admin_role_menu FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_admin_operation_log BEFORE INSERT OR UPDATE OR DELETE ON admin_operation_log FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_products BEFORE INSERT OR UPDATE OR DELETE ON products FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_roles BEFORE INSERT OR UPDATE OR DELETE ON roles FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_utilizadores BEFORE INSERT OR UPDATE OR DELETE ON utilizadores FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_compras BEFORE INSERT OR UPDATE OR DELETE ON compras FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_botijas_compras BEFORE INSERT OR UPDATE OR DELETE ON botijas_compras FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_botijas_maquinas BEFORE INSERT OR UPDATE OR DELETE ON botijas_maquinas FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_carrinhos BEFORE INSERT OR UPDATE OR DELETE ON carrinhos FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_botijas_carrinhos BEFORE INSERT OR UPDATE OR DELETE ON botijas_carrinhos FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_notificacoes BEFORE INSERT OR UPDATE OR DELETE ON notificacoes FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_admin_users BEFORE INSERT OR UPDATE OR DELETE ON admin_users FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_admin_roles BEFORE INSERT OR UPDATE OR DELETE ON admin_roles FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_admin_permissions BEFORE INSERT OR UPDATE OR DELETE ON admin_permissions FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_admin_menu BEFORE INSERT OR UPDATE OR DELETE ON admin_menu FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_admin_role_users BEFORE INSERT OR UPDATE OR DELETE ON admin_role_users FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_admin_role_permissions BEFORE INSERT OR UPDATE OR DELETE ON admin_role_permissions FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_admin_user_permissions BEFORE INSERT OR UPDATE OR DELETE ON admin_user_permissions FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_botijas BEFORE INSERT OR UPDATE OR DELETE ON botijas FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_utilizadores_botijas BEFORE INSERT OR UPDATE OR DELETE ON utilizadores_botijas FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_pagamentos BEFORE INSERT OR UPDATE OR DELETE ON pagamentos FOR EACH ROW EXECUTE PROCEDURE f_logs();
            CREATE TRIGGER logs_maquinas BEFORE INSERT OR UPDATE OR DELETE ON maquinas FOR EACH ROW EXECUTE PROCEDURE f_logs();
        ');

        DB::unprepared('
            CREATE OR REPLACE FUNCTION select_all_triggers() RETURNS SETOF text AS $$ 
            SELECT \'CREATE TRIGGER \' || tab_name || \' BEFORE INSERT OR UPDATE OR DELETE ON \' || t_name || \' FOR EACH ROW EXECUTE PROCEDURE f_logs();\' AS t_logs 
	        FROM (  SELECT \'logs_\'|| table_name AS tab_name, table_name AS t_name FROM information_schema.tables 
			WHERE table_schema=\'public\' AND table_name NOT ILIKE \'logs\' AND table_name NOT ILIKE \'vw_%\' ) tablist;
            $$ LANGUAGE sql SECURITY DEFINER;
        ');

        DB::unprepared('
            CREATE OR REPLACE FUNCTION strip_all_triggers() RETURNS text AS $$ DECLARE
                triggNameRecord RECORD;
                triggTableRecord RECORD;
                BEGIN
                    FOR triggNameRecord IN select distinct(trigger_name) from information_schema.triggers where trigger_schema = \'public\' LOOP
                        FOR triggTableRecord IN SELECT distinct(event_object_table) from information_schema.triggers where trigger_name = triggNameRecord.trigger_name LOOP
                            RAISE NOTICE \'Dropping trigger: % on table: %\', triggNameRecord.trigger_name, triggTableRecord.event_object_table;
                            EXECUTE \'DROP TRIGGER \' || triggNameRecord.trigger_name || \' ON \' || triggTableRecord.event_object_table || \';\';
                        END LOOP;
                    END LOOP;
                    RETURN \'done\';
                END;
            $$ LANGUAGE plpgsql SECURITY DEFINER;
        ');
		
		DB::unprepared("
			CREATE OR REPLACE FUNCTION f_alerta_estado() RETURNS trigger AS $$
				BEGIN
					IF NEW.online = false THEN
						INSERT INTO notificacoes (id, data_hora, id_maquina, mensagem)
						VALUES (DEFAULT, now(), NEW.id, 'Máquina ' || NEW.id || ' offline');
						RETURN NEW;
					ELSE
						INSERT INTO notificacoes (id, data_hora, id_maquina, mensagem)
						VALUES (DEFAULT, now(), NEW.id, 'Máquina ' || NEW.id || ' online');
						RETURN NEW;
					END IF;
				END;
			$$ LANGUAGE plpgsql SECURITY DEFINER;
			CREATE TRIGGER alerta_treino BEFORE INSERT OR UPDATE OF online ON maquinas FOR EACH ROW EXECUTE PROCEDURE f_alerta_estado();
		");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('
            SELECT strip_all_triggers();
            DROP FUNCTION f_password();
            DROP FUNCTION f_logs();
            DROP FUNCTION f_activeUser();
			
            DROP FUNCTION strip_all_triggers();
            DROP FUNCTION select_all_triggers();
        ');
    }
}
