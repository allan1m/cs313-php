CREATE TABLE scriptures(
id SERIAL NOT NULL,
book CHAR(255),
chapter CHAR(255),
verse INT,
content TEXT
);

INSERT INTO scriptures (book, chapter, verse, content) VALUES ('New Testament',  'St John', 1, 'And the alight shineth in bdarkness; and the darkness ccomprehended it not.');

INSERT INTO scriptures (book, chapter, verse, content) VALUES ('D&C',  '23', 1, 'He that akeepeth his commandments receiveth btruth and clight, until he is glorified in truth and dknoweth all things.');

INSERT INTO scriptures (book, chapter, verse, content) VALUES ('D&C',  '88', 49, 'The alight shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall be comprehend even God, being quickened in him and by him.');