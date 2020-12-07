DROP TABLE complainment;
DROP TABLE customer_log;
DROP TABLE cleaning;
DROP TABLE task_log;
DROP TABLE reservation;
DROP TABLE reservation_log;
DROP TABLE staff;
DROP TABLE customer;
DROP TABLE room;
DROP TABLE room_type;


CREATE TABLE complainment (
	code		INTEGER 		AUTO_INCREMENT,
	ttime		DATETIME	NOT NULL,
	rnumber		INTEGER 		NOT NULL,
	staff_id		VARCHAR(20) 	NOT NULL,
	complainment 	VARCHAR(20) 	NOT NULL,
	detail 		TEXT		NOT NULL,
	recept	 	TINYINT		NOT NULL,
	PRIMARY KEY(code)
);

CREATE TABLE customer_log (
	logSeq		INTEGER		AUTO_INCREMENT,
	code 		INTEGER 		NOT NULL,
	id 		VARCHAR(20)	NOT NULL,
	cname 		VARCHAR(20)	NOT NULL,
	rnumber 		INTEGER		NOT NULL,
	phone 		VARCHAR(20)	NOT NULL,
	checkIn 		DATE 		NOT NULL,
	checkOut 	DATE		NOT NULL,
	PRIMARY KEY(logSeq)
);

CREATE TABLE cleaning (
	code 		INTEGER		AUTO_INCREMENT,
	ttime 		DATETIME	NOT NULL,
	rnumber		INTEGER 		NOT NULL,
	staff_id 		VARCHAR(20)	NOT NULL,
	PRIMARY KEY(code)
);

CREATE TABLE task_log (
	code 		INTEGER 		AUTO_INCREMENT,
	ttime 		DATETIME	NOT NULL,
	rnumber 		INTEGER 		NOT NULL,
	staff_id 		VARCHAR(20) 	NOT NULL,
	tstatus 		VARCHAR(20) 	NOT NULL,
	PRIMARY KEY(code)
);

CREATE TABLE staff (
	id 		VARCHAR(20)	NOT NULL,
	pw 		VARCHAR(20)	NOT NULL,
	sname 		VARCHAR(20)	NOT NULL,
	phone 		VARCHAR(20)	NOT NULL,
	department 	VARCHAR(20) 	NOT NULL,
	attendance	TINYINT 		NOT NULL,
	accept 		TINYINT 		NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE customer (
	id 		VARCHAR(20) 	PRIMARY KEY,
	password		VARCHAR(20)	NOT NULL,
	cname 		VARCHAR(20)	NOT NULL,
	phone 		VARCHAR(20)	NOT NULL
);

CREATE TABLE room_type (
	rtype 			VARCHAR(20) 	PRIMARY KEY,
	price 			INTEGER 		NOT NULL,
	personnelLimit 		INTEGER 		NOT NULL,
	bed 			INTEGER 		NOT NULL,
	view 			VARCHAR(20) 	NOT NULL,
	pc 			INTEGER 		NOT NULL
);

CREATE TABLE room (
	rnumber	 	INTEGER 		PRIMARY KEY,
	rtype 		VARCHAR(20) 	NOT NULL,
	isEmpty 		TINYINT 		NOT NULL,
	clean 		TINYINT 		NOT NULL,
	FOREIGN KEY(rtype) REFERENCES room_type(rtype)
);

CREATE TABLE reservation (
	code		INTEGER		AUTO_INCREMENT,
	id 		VARCHAR(20) 	NOT NULL,
	rnumber 		INTEGER 		NOT NULL,
	num_guests 	INTEGER 		NOT NULL,
	checkIn 		DATE 		NOT NULL,
	checkOut 	DATE 		NOT NULL,
	PRIMARY KEY(code),
	FOREIGN KEY(id) REFERENCES customer(id),
	FOREIGN KEY(rnumber) REFERENCES room(rnumber)
);
ALTER TABLE reservation AUTO_INCREMENT=1031;

CREATE TABLE reservation_log (
	rnumber 	INTEGER,
	use_date 	DATE,
	code 		INTEGER,
	PRIMARY KEY(rnumber, use_date)
);


INSERT INTO staff VALUES ('admin', 'admin', '관리자', '01036464406', 'master', 0, 1);

INSERT INTO room_type VALUES ('STANDARD', 120000, 2, 1, 'CITY', 0);
INSERT INTO room_type VALUES ('DELUX', 180000, 2, 1, 'OCEAN', 1);
INSERT INTO room_type VALUES ('FAMILY', 270000, 4, 3, 'CITY', 2);

INSERT INTO room VALUES (201, 'FAMILY', 1, 1);
INSERT INTO room VALUES (202, 'FAMILY', 1, 1);
INSERT INTO room VALUES (203, 'STANDARD', 1, 1);
INSERT INTO room VALUES (204, 'STANDARD', 1, 0);
INSERT INTO room VALUES (205, 'FAMILY', 1, 1);
INSERT INTO room VALUES (206, 'FAMILY', 1, 1);
INSERT INTO room VALUES (207, 'STANDARD', 1, 0);
INSERT INTO room VALUES (208, 'STANDARD', 1, 1);
INSERT INTO room VALUES (301, 'FAMILY', 1, 0);
INSERT INTO room VALUES (302, 'FAMILY', 1, 1);
INSERT INTO room VALUES (303, 'STANDARD', 1, 1);
INSERT INTO room VALUES (304, 'STANDARD', 1, 1);
INSERT INTO room VALUES (305, 'FAMILY', 1, 1);
INSERT INTO room VALUES (306, 'FAMILY', 1, 1);
INSERT INTO room VALUES (307, 'STANDARD', 1, 1);
INSERT INTO room VALUES (308, 'STANDARD', 1, 0);
INSERT INTO room VALUES (401, 'FAMILY', 1, 1);
INSERT INTO room VALUES (402, 'FAMILY', 1, 1);
INSERT INTO room VALUES (403, 'STANDARD', 1, 1);
INSERT INTO room VALUES (404, 'STANDARD', 1, 1);
INSERT INTO room VALUES (405, 'FAMILY', 1, 1);
INSERT INTO room VALUES (406, 'FAMILY', 1, 0);
INSERT INTO room VALUES (407, 'STANDARD', 1, 1);
INSERT INTO room VALUES (408, 'STANDARD', 1, 1);
INSERT INTO room VALUES (501, 'FAMILY', 1, 1);
INSERT INTO room VALUES (502, 'FAMILY', 1, 0);
INSERT INTO room VALUES (503, 'STANDARD', 1, 1);
INSERT INTO room VALUES (504, 'STANDARD', 1, 1);
INSERT INTO room VALUES (505, 'FAMILY', 1, 0);
INSERT INTO room VALUES (506, 'FAMILY', 1, 1);
INSERT INTO room VALUES (507, 'STANDARD', 1, 1);
INSERT INTO room VALUES (508, 'STANDARD', 1, 1);
INSERT INTO room VALUES (601, 'FAMILY', 1, 1);
INSERT INTO room VALUES (602, 'FAMILY', 1, 1);
INSERT INTO room VALUES (603, 'STANDARD', 1, 1);
INSERT INTO room VALUES (604, 'STANDARD', 1, 0);
INSERT INTO room VALUES (605, 'FAMILY', 1, 0);
INSERT INTO room VALUES (606, 'FAMILY', 1, 1);
INSERT INTO room VALUES (607, 'STANDARD', 1, 1);
INSERT INTO room VALUES (608, 'STANDARD', 1, 0);
INSERT INTO room VALUES (701, 'DELUX', 1, 0);
INSERT INTO room VALUES (702, 'DELUX', 1, 0);
INSERT INTO room VALUES (703, 'DELUX', 1, 0);
INSERT INTO room VALUES (704, 'DELUX', 1, 1);
INSERT INTO room VALUES (705, 'DELUX', 1, 1);
INSERT INTO room VALUES (706, 'DELUX', 1, 1);
INSERT INTO room VALUES (707, 'DELUX', 1, 1);
INSERT INTO room VALUES (708, 'DELUX', 1, 1);
INSERT INTO room VALUES (801, 'DELUX', 1, 1);
INSERT INTO room VALUES (802, 'DELUX', 1, 1);
INSERT INTO room VALUES (803, 'DELUX', 1, 1);
INSERT INTO room VALUES (804, 'DELUX', 1, 1);
INSERT INTO room VALUES (805, 'DELUX', 1, 1);
INSERT INTO room VALUES (806, 'DELUX', 1, 1);
INSERT INTO room VALUES (807, 'DELUX', 1, 0);
INSERT INTO room VALUES (808, 'DELUX', 1, 1);

INSERT INTO staff VALUES ('m1', '12345', '이준호', '01000000000', 'manager', 1, 1);
INSERT INTO staff VALUES ('r1', '12345', '최준호', '01011111111', 'receptionist', 1, 1);
INSERT INTO staff VALUES ('r2', '12345', '김서준', '01022222222', 'receptionist', 1, 1);
INSERT INTO staff VALUES ('r3', '12345', '최시우', '01033333333', 'receptionist', 1, 1);
INSERT INTO staff VALUES ('r4', '12345', '서연', '01044444444', 'receptionist', 1, 1);
INSERT INTO staff VALUES ('r5', '12345', '이민서', '01055555555', 'receptionist', 1, 1);
INSERT INTO staff VALUES ('r6', '12345', '김수아', '01066666666', 'receptionist', 1, 1);
INSERT INTO staff VALUES ('k1', '12345', '김준호', '01077777777', 'roomkeeper', 1, 1);
INSERT INTO staff VALUES ('k2', '12345', '이지호', '01088888888', 'roomkeeper', 1, 1);
INSERT INTO staff VALUES ('k3', '12345', '최주원', '01099999999', 'roomkeeper', 1, 1);
INSERT INTO staff VALUES ('k4', '12345', '고현준', '01111111111', 'roomkeeper', 1, 1);
INSERT INTO staff VALUES ('k5', '12345', '문기범', '01122222222', 'roomkeeper', 1, 1);
INSERT INTO staff VALUES ('k6', '12345', '이재현', '01133333333', 'roomkeeper', 1, 1);
INSERT INTO staff VALUES ('k7', '12345', '한지원', '01144444444', 'roomkeeper', 1, 1);
INSERT INTO staff VALUES ('k8', '12345', '박승현', '01155555555', 'roomkeeper', 1, 1);
INSERT INTO staff VALUES ('k9', '12345', '박준호', '01166666666', 'roomkeeper', 0, 0);
INSERT INTO staff VALUES ('k10', '12345', '최아린', '01177777777', 'roomkeeper', 0, 0);

INSERT INTO customer VALUES ('crh', '1234', '최라희', '01212345678');
INSERT INTO customer VALUES ('gmg', '1234', '고민건', '01812345678');
INSERT INTO customer VALUES ('kju', '1234', '김재욱', '01187654321');
INSERT INTO customer VALUES ('hsh', '1234', '한시훈', '01512345678');
INSERT INTO customer VALUES ('luj', '1234', '이은지', '01312345678');
INSERT INTO customer VALUES ('swj', '1234', '손원준', '01287654321');
INSERT INTO customer VALUES ('psc', '1234', '박승찬', '02112345678');
INSERT INTO customer VALUES ('jsb', '1234', '전승빈', '02812345678');
INSERT INTO customer VALUES ('kaj', '1234', '김아진', '02212345678');
INSERT INTO customer VALUES ('kmk', '1234', '김민기', '01612345678');

INSERT INTO reservation (id, rnumber, num_guests, checkIn, checkOut) VALUES ('gmg', 202, 5, '2020-12-06', '2020-12-08');
INSERT INTO reservation (id, rnumber, num_guests, checkIn, checkOut) VALUES ('gmg', 203, 2, '2020-12-07', '2020-12-08');
INSERT INTO reservation (id, rnumber, num_guests, checkIn, checkOut) VALUES ('kju', 305, 4, '2020-12-07', '2020-12-08');
INSERT INTO reservation (id, rnumber, num_guests, checkIn, checkOut) VALUES ('hsh', 306, 4, '2020-12-07', '2020-12-08');
INSERT INTO reservation (id, rnumber, num_guests, checkIn, checkOut) VALUES ('luj', 506, 4, '2020-12-08', '2020-12-09');
INSERT INTO reservation (id, rnumber, num_guests, checkIn, checkOut) VALUES ('luj', 507, 2, '2020-12-08', '2020-12-09');
INSERT INTO reservation (id, rnumber, num_guests, checkIn, checkOut) VALUES ('swj', 301, 5, '2020-12-08', '2020-12-10');
INSERT INTO reservation (id, rnumber, num_guests, checkIn, checkOut) VALUES ('psc', 302, 4, '2020-12-08', '2020-12-10');
INSERT INTO reservation (id, rnumber, num_guests, checkIn, checkOut) VALUES ('jsb', 704, 2, '2020-12-09', '2020-12-10');
INSERT INTO reservation (id, rnumber, num_guests, checkIn, checkOut) VALUES ('jsb', 705, 4, '2020-12-09', '2020-12-10');
INSERT INTO reservation (id, rnumber, num_guests, checkIn, checkOut) VALUES ('kaj', 501, 4, '2020-12-09', '2020-12-11');
INSERT INTO reservation (id, rnumber, num_guests, checkIn, checkOut) VALUES ('kmk', 508, 3, '2020-12-09', '2020-12-12');

INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(69, 'ljo', '이지오', 403, '01012345678', '2020-11-05', '2020-11-07');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(70, 'kgo', '김가온', 701, '01112345678', '2020-11-05', '2020-11-06');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(71, 'crh', '최라희', 702, '01212345678', '2020-11-06', '2020-11-08');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(72, 'luj', '이은지', 703, '01312345678', '2020-11-06', '2020-11-07');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(73, 'png', '박나경', 804, '01412345678', '2020-11-06', '2020-11-09');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(74, 'hsh', '한시훈', 805, '01512345678', '2020-11-07', '2020-11-08');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(75, 'kmk', '김민기', 806, '01612345678', '2020-11-07', '2020-11-08');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(76, 'phm', '박현민', 504, '01712345678', '2020-11-07', '2020-11-09');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(77, 'gmg', '고민건', 503, '01812345678', '2020-11-08', '2020-11-09');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(78, 'kty', '김태영', 505, '01912345678', '2020-11-08', '2020-11-09');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(79, 'shj', '서현준', 601, '01087654321', '2020-11-09', '2020-11-10');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(80, 'kju', '김재욱', 603, '01187654321', '2020-11-10', '2020-11-11');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(81, 'swj', '손원준', 607, '01287654321', '2020-11-11', '2020-11-12');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(82, 'ldh', '이다희', 503, '01387654321', '2020-11-12', '2020-11-14');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(83, 'sjw', '송정원', 403, '01487654321', '2020-11-13', '2020-11-14');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(84, 'kdh', '김다혜', 503, '01587654321', '2020-11-14', '2020-11-15');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(85, 'lsy', '이승연', 803, '01687654321', '2020-11-15', '2020-11-16');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(86, 'kjh', '김지현', 804, '01787654321', '2020-11-15', '2020-11-16');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(87, 'njy', '나지영', 805, '01887654321', '2020-11-16', '2020-11-17');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(88, 'lgy', '이고은', 806, '01987654321', '2020-11-16', '2020-11-18');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(89, 'cng', '최나경', 807, '02087654321', '2020-11-17', '2020-11-19');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(90, 'gjh', '고지혁', 501, '02012345678', '2020-11-18', '2020-11-19');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(91, 'psc', '박승찬', 403, '02112345678', '2020-11-19', '2020-11-20');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(92, 'kaj', '김아진', 404, '02212345678', '2020-11-20', '2020-11-21');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(93, 'psj', '박소정', 301, '02312345678', '2020-11-21', '2020-11-22');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(94, 'pyc', '박윤찬', 302, '02412345678', '2020-11-22', '2020-11-24');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(95, 'ksj', '김세준', 303, '02512345678', '2020-11-22', '2020-11-24');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(96, 'lth', '이태현', 307, '02612345678', '2020-11-23', '2020-11-24');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(97, 'pdg', '박동건', 207, '02712345678', '2020-11-24', '2020-11-25');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(98, 'jsb', '전승빈', 206, '02812345678', '2020-11-25', '2020-11-26');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(99, 'lsh', '이소희', 205, '02912345678', '2020-11-26', '2020-11-27');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(100, 'jcy', '정채연', 501, '02087654321', '2020-12-01', '2020-12-02');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(101, 'ljh', '이주호', 507, '02087654321', '2020-12-01', '2020-12-02');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(102, 'kdo', '김다온', 503, '02087654321', '2020-12-02', '2020-12-04');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(103, 'chl', '최하랑', 208, '02087654321', '2020-12-02', '2020-12-04');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(104, 'ghj', '고현지', 402, '02087654321', '2020-12-03', '2020-12-05');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(105, 'csh', '최소현', 407, '02087654321', '2020-12-04', '2020-12-06');
INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut) VALUE(106, 'hmj', '한민정', 501, '02087654321', '2020-12-05', '2020-12-06');
