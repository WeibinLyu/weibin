CREATE VIEW VIEW_backEndsData
AS 

SELECT user.username 
, user.realName StuName
, user.studentId StuId
, user.studentAcademy StuAcademy
, user.studentProfessional StuMajor
, teacher.realName TeaName
, teacher.teacherWorkAddress TeaAcademy
, teacher.teacherProfessionalTitle TeaJob
, subject.subjectName SubName
, subject.content
, assignmentBook.topicType
, assignmentBook.date
, assignmentBook.paperContent
, assignmentBook.paperRequireAndData paperRequireAndData
, assignmentBook.paperPreliminaryWork paperWork
, assignmentBook.referenceDocumentation
, assignmentBook.equipment
, assignmentBook.taskAssignmentDate
, assignmentBook.taskStartData
-- taskEndData
, assignmentBook.enterpriseOrGoup
, assignmentBook.chiefOpnion
, assignmentBook.acadmyGroupnion

FROM user, assignmentBook, subject, user AS teacher 

WHERE assignmentBook.subjectId = subject.id
AND assignmentBook.chooserId = user.id
AND teacher.id = subject.createrId 
WITH CHECK OPTION;
