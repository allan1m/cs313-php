DROP TABLE IF EXISTS employee;
DROP TABLE IF EXISTS schedule;

CREATE TABLE employee(
id SERIAL NOT NULL PRIMARY KEY,
last_name VARCHAR(50) NOT NULL,
first_name VARCHAR(50) NOT NULL,
address VARCHAR(50) NOT NULL,
phone_number VARCHAR(50) NOT NULL
);

CREATE TABLE schedule(
id SERIAL NOT NULL PRIMARY KEY,
work_date DATE NOT NULL,
start_work_time TIME(0) NOT NULL,
end_work_time TIME(0) NOT NULL,
employee_id INT NOT NULL REFERENCES employee(id)
);

INSERT INTO employee (last_name, first_name, address, phone_number) VALUES ('Doe', 'John', '123 abc st, Phoenix, AZ 85040', '(123)-456-7890');

INSERT INTO employee (last_name, first_name, address, phone_number) VALUES ('Doe', 'Jane', '456 def st, Phoenix, AZ 85041', '(456)-789-0123');

INSERT INTO employee (last_name, first_name, address, phone_number) VALUES ('Doe', 'Junior', '789 ghi st, Phoenix, AZ 85042', '(789)-012-3456');

INSERT INTO schedule (work_date, start_work_time, end_work_time, employee_id) VALUES ('2021-01-01', '09:30:00', '06:00:00', 1);

INSERT INTO schedule (work_date, start_work_time, end_work_time, employee_id) VALUES ('2021-01-01', '010:30:00', '07:00:00', 2);

INSERT INTO schedule (work_date, start_work_time, end_work_time, employee_id) VALUES ('2021-01-01', '011:30:00', '08:00:00', 3);