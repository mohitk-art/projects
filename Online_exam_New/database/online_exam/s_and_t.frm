TYPE=VIEW
query=select `t`.`test_id` AS `test_id`,`t`.`sub_id` AS `sub_id`,`t`.`test_name` AS `test_name`,`t`.`total_que` AS `total_que`,`s`.`sub_name` AS `sub_name` from `online_exam`.`mst_test` `t` join `online_exam`.`mst_subject` `s` where (`t`.`sub_id` = `s`.`sub_id`)
md5=a0bffeca57849a94f52d9f6a767cab64
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2017-11-21 18:37:07
create-version=1
source=select t.*, s.sub_name from mst_test t,mst_subject s where t.sub_id=s.sub_id
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `t`.`test_id` AS `test_id`,`t`.`sub_id` AS `sub_id`,`t`.`test_name` AS `test_name`,`t`.`total_que` AS `total_que`,`s`.`sub_name` AS `sub_name` from `online_exam`.`mst_test` `t` join `online_exam`.`mst_subject` `s` where (`t`.`sub_id` = `s`.`sub_id`)
