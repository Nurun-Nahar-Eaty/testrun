use libraryboooking;
CREATE TABLE `books` (
    `BookID` INT(100) NOT NULL,
    `Name` VARCHAR(100) NOT NULL,
    `Auther Name` VARCHAR(100) NOT NULL,
    `Edition` INT(10) NOT NULL,
    `Location` VARCHAR(100) NOT NULL,
    `Status` VARCHAR(100) NOT NULL
)  ENGINE=INNODB;
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`);
INSERT INTO `books` (`BookID`, `Name`, `Auther Name`, `Edition`, `Location`, `Status`) 
VALUES ('95661', 'Java Program Design', 'Douglas A. Lind, William G. Marchal, Samuel A. Wathen.', '13th', '	BUP Library Division General Stacks', 'Available'),
       ('95433', 'Artificial Intelligence', 'Douglas A. Lind, William G. Marchal, Samuel A. Wathen.', '13th', '	BUP Library Division General Stacks', 'Not Available'),
       ('94345', 'Math IV', 'Raymond', '5', '	BUP Library Division General Stack 2', 'Available'),
       ('93434', 'Statistics', 'R.M Joon', '11', '	BUP Library Division General Stacks', 'Available'),
       ('93676', 'Business Math', 'J.K Jung', '2nd', '	BUP Library Division General Stacks', 'Available'),
        ('94344', 'History of Bangladesh', 'M.Y.G William', '7th', ' BUP Library Division General Stack 3', 'Not Available');

CREATE TABLE  `student` (
`userid` int(100) NOT NULL AUTO_INCREMENT,
`usertype` varchar(100) NOT NULL,
`username` varchar(100) NOT NULL,
`password` varchar(100) NOT NULL,
 `roll` int(100) NOT NULL,
`email` varchar(100) NOT NULL,
`mobile` int(100) NOT NULL,
PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE student AUTO_INCREMENT=1000;

INSERT INTO `student` ( `usertype`, `username`, `password`, `roll`, `email`, `mobile`) VALUES
('admin','Afia Abida Promi', '1234', 10000, 'afia1@gmail.com', '034045000'),
('user','Nurun Nahar', '9999', 32400, 'mim@gmail.com', '53888454'),
('admin','Arpa Tasnim','2123', 1510016, 'samiarahman@gmail.com', '12348856'),
('user','Ayesha Noor', '9870', 1510052, 'shimu1@gmail.com', '1739000000'),
('user','Sharmin Sultana Nupur', '1212', 1510047, 'suchana@gmail.com', '1739000000');
