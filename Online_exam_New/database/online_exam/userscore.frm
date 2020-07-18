TYPE=VIEW
query=select `r`.`login` AS `username`,`sat`.`sub_name` AS `subject`,`sat`.`test_name` AS `test`,`r`.`score` AS `score`,`sat`.`total_que` AS `total_que`,`r`.`test_date` AS `test_date` from `online_exam`.`mst_result` `r` join `online_exam`.`s_and_t` `sat` where (`sat`.`test_id` = `r`.`test_id`)
md5=e805ef7bf6fa8155b955e735186c0fd7
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2017-11-21 18:56:27
create-version=1
source=select r.login"username", sat.sub_name"subject", sat.test_name"test", r.score"score", sat.total_que"total_que" ,r.test_date"test_date" from mst_result r, s_and_t sat where sat.test_id=r.test_id
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `r`.`login` AS `username`,`sat`.`sub_name` AS `subject`,`sat`.`test_name` AS `test`,`r`.`score` AS `score`,`sat`.`total_que` AS `total_que`,`r`.`test_date` AS `test_date` from `online_exam`.`mst_result` `r` join `online_exam`.`s_and_t` `sat` where (`sat`.`test_id` = `r`.`test_id`)
