1.SELECT * FROM `baiviet`  WHERE ma_tloai = (SELECT `ma_tloai` FROM `theloai` WHERE `ten_tloai` like "Nhạc trữ tình")

2.SELECT * FROM `baiviet`  WHERE ma_tgia = (SELECT `ma_tgia` FROM `tacgia` WHERE `ten_tgia` like "Nhacvietplus")

3.SELECT ten_tloai FROM `theloai` WHERE ma_tloai not in (SELECT `ma_tloai`  from `baiviet`)

4.SELECT `baiviet`.*, `tacgia`.*, `theloai`.*
FROM `baiviet` 
	LEFT JOIN `tacgia` ON `baiviet`.`ma_tgia` = `tacgia`.`ma_tgia` 
	LEFT JOIN `theloai` ON `baiviet`.`ma_tloai` = `theloai`.`ma_tloai`;

5. SELECT theloai.ten_tloai, COUNT(baiviet.ma_tloai) from baiviet LEFT JOIN theloai on baiviet.ma_tloai=theloai.ma_tloai GROUP BY baiviet.ma_tloai,theloai.ma_tloai HAVING COUNT(baiviet.ma_tloai) >= ALL(SELECT COUNT(baiviet.ma_tloai) from baiviet LEFT JOIN theloai on baiviet.ma_tloai=theloai.ma_tloai GROUP BY baiviet.ma_tloai,theloai.ma_tloai)

6.SELECT theloai.ten_tloai, COUNT(baiviet.ma_tloai) from baiviet LEFT JOIN theloai on baiviet.ma_tloai=theloai.ma_tloai GROUP BY baiviet.ma_tloai,theloai.ma_tloai HAVING COUNT(baiviet.ma_tloai) >= ALL(SELECT COUNT(baiviet.ma_tloai) from baiviet LEFT JOIN theloai on baiviet.ma_tloai=theloai.ma_tloai GROUP BY baiviet.ma_tloai,theloai.ma_tloai)

7.SELECT  *  from `baiviet` WHERE baiviet.tomtat='%yêu%' or baiviet.tomtat ='%thương%' or baiviet.tomtat='%anh%' or baiviet.tomtat LIKE  '%em%' 

8.SELECT  *  from `baiviet` WHERE baiviet.tomtat='%yêu%' or baiviet.tomtat ='%thương%' or baiviet.tomtat='%anh%' or baiviet.tomtat LIKE  '%em%' or baiviet.tieude LIKE'%yêu%' or baiviet.tieude LIKE'%thương%' or baiviet.tieude LIKE'%anh%' or baiviet.tieude LIKE  '%em%'