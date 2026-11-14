<div align="center">

🐧 LINUX & SHELL
LAB 01 — COMMAND LINE FUNDAMENTALS

Linux Practical Exercises & Documentation

👨‍🎓 Student Information
Field	Information
Student	Nizar Babai
Group	Group 3
Subject	Linux & Shell
Lab	Practical Lab 01

Learning Linux, one command at a time.

</div>

📑 Table of Contents
Introduction
Basic Linux Commands
Navigation and Directories
File Management
Working with Text
Working with Logs
School Directory Exercise
Library Directory Exercise
Saving Command History
Lab Questions & Answers
Linux Command Reference
🎯 Introduction

This laboratory introduces the fundamental concepts of Linux and shell commands.

The main objectives are:

Understand the Linux terminal.
Navigate between directories.
Create, copy, move and delete files.
Read and modify text files.
Work with directories and file structures.
Use Linux commands to search and manage information.
Understand basic file permissions.
🖥️ Part 1 — Basic Linux Commands
1.1 Introduction to the terminal
bash
whoami
date
echo "Hello Linux"
clear
pwd
ls

1.2 Listing files
Command	Function
ls	Lists files and directories
ls -l	Displays detailed information
ls -a	Displays hidden files
ls -h	Displays human-readable sizes
📁 Part 2 — Navigation and Directories
2.1 Navigating through directories
bash
cd ~
pwd
ls

cd /
ls

cd /home
pwd

cd ~
pwd

2.2 Creating directories
bash
mkdir test
cd test
pwd

cd ..
pwd

mkdir lab1
cd lab1

mkdir photos docs

💡 Tip: ~ represents your home directory, while / represents the root directory.
📂 Part 3 — File Management
3.1 Creating files
bash
touch docs/notes.txt
touch docs/todo.txt

3.2 Copying files
bash
cp docs/notes.txt docs/notes_backup.txt

3.3 Moving and renaming files
bash
mv docs/todo.txt docs/tasks.txt

3.4 Removing files and directories
bash
rm docs/notes_backup.txt
rmdir photos

3.5 Creating nested directories
bash
mkdir -p project/src project/data

ls -R project

📝 Part 4 — Working with Text
4.1 Writing into files
bash
cd ~/lab1/docs

echo "Linux is fun" > notes.txt

4.2 Appending text
bash
echo "Second line" >> notes.txt
echo "Third line" >> notes.txt

4.3 Displaying file contents
bash
cat notes.txt

4.4 Counting lines
bash
wc -l notes.txt

4.5 Displaying specific lines
bash
head -n 1 notes.txt
tail -n 1 notes.txt

4.6 Replacing file contents
bash
echo "Oops" > notes.txt

cat notes.txt

⚠️ Important:
> replaces the existing file content.
>> appends new content without deleting the previous content.
🔍 Part 5 — Working with Logs
5.1 Creating a log directory
bash
cd ~

mkdir lab3
cd lab3

5.2 Creating a log file
bash
printf "INFO start\nERROR disk\nINFO login\nERROR net\n" > log.txt

5.3 Reading the log file
bash
cat log.txt


Expected output:

text
INFO start
ERROR disk
INFO login
ERROR net

5.4 Counting errors
bash
grep -c "ERROR" log.txt


Expected output:

text
2

5.5 Working with scripts
bash
chmod +x run.sh
./run.sh

5.6 Counting system configuration entries
bash
ls /etc | wc -l

🎓 Part 6 — School Directory Exercise
6.1 Creating the directory structure
bash
cd ~

mkdir -p school/math school/physics

6.2 Creating files
bash
touch school/readme.txt
touch school/math/exercises.txt
touch school/physics/formulas.txt

6.3 Copying and renaming files
bash
cp school/readme.txt school/readme_backup.txt

mv school/readme_backup.txt school/old_readme.txt

6.4 Displaying file contents
bash
cat school/readme.txt
cat school/old_readme.txt
cat school/math/exercises.txt

6.5 Listing the directory structure
bash
ls -R school

6.6 Organizing school files
bash
rm school/old_readme.txt

mkdir school/chemistry

mv school/physics/formulas.txt school/chemistry/

ls -R school

📚 Part 7 — Library Directory Exercise
7.1 Creating the library structure
bash
cd ~

mkdir -p library/books library/movies library/music

ls -R library

7.2 Creating files
bash
touch library/books/books.txt
touch library/movies/movies.txt
touch library/music/music.txt

7.3 Adding books
bash
echo "Atomic Habits" > library/books/books.txt
echo "The Alchemist" >> library/books/books.txt
echo "Rich Dad Poor Dad" >> library/books/books.txt

cat library/books/books.txt

7.4 Adding movies
bash
echo "CREED1" > library/movies/movies.txt
echo "CREED2" >> library/movies/movies.txt
echo "CREED3" >> library/movies/movies.txt

cat library/movies/movies.txt

7.5 Adding music
bash
echo "Song One" > library/music/music.txt
echo "Song Two" >> library/music/music.txt
echo "Song Three" >> library/music/music.txt

cat library/music/music.txt

7.6 Creating personal information
bash
touch library/about.txt

echo "Nizar Babai" > library/about.txt
echo "Group 3" >> library/about.txt
date >> library/about.txt

cat library/about.txt

7.7 Copying and moving files
bash
cp library/books/books.txt library/books/books_backup.txt

mv library/movies/movies.txt library/movies/films.txt

mkdir library/archive

mv library/books/books_backup.txt library/archive/

7.8 Reading and counting lines
bash
head -n 2 library/music/music.txt

tail -n 1 library/music/music.txt

wc -l library/books/books.txt
wc -l library/movies/films.txt
wc -l library/music/music.txt

💾 Part 8 — Saving Command History
8.1 Creating a submission file
bash
touch submission.txt

ls -R library > submission.txt

8.2 Saving the last 40 commands
bash
history | tail -n 40 >> submission.txt

8.3 Editing the submission
bash
nano submission.txt

8.4 Saving the complete command history
bash
touch ~/commands.txt

history > ~/commands.txt

❓ Lab Questions & Answers
Part 1 — Basic Commands

Q1. What did whoami print?

It printed the current user's username: nizar.

Q2. What did date print?

It printed the current date and time.

Q3. What did echo Hello Linux print?

text
Hello Linux

Part 2 — Navigation

Q1. What does cd with no argument do?

It takes you back to your home directory.

Q2. What is the difference between cd /tmp and cd tmp?

cd /tmp goes to the absolute path /tmp.
cd tmp looks for a directory named tmp inside the current directory.

Q3. Which folder are you in after running cd ../.. from /home/student?

The root directory (/).

Part 3 — File Operations

Q1. What will cat notes.txt show after running echo "Oops" > notes.txt?

text
Oops


Explanation: The > operator replaces the previous content of the file.

Part 4 — Tab Completion

Q1. What happens when you type cd ~/lab1/do and press Tab?

The terminal automatically completes the directory name to docs/ if it is the only matching name.

Q2. Which cp option asks before overwriting a file?

The -i option.

Example:

bash
cp -i file.txt backup.txt

📖 Linux Command Reference
Command	Description	Example
whoami	Current username	whoami
date	Current date and time	date
pwd	Current directory	pwd
ls	List files	ls -la
cd	Change directory	cd ~/Documents
mkdir	Create directory	mkdir lab1
touch	Create file	touch notes.txt
cp	Copy files	cp a.txt b.txt
mv	Move or rename files	mv a.txt b.txt
rm	Delete files	rm notes.txt
rmdir	Delete empty directory	rmdir test
cat	Display file contents	cat notes.txt
echo	Display or write text	echo "Hello"
head	First lines	head -n 5 file.txt
tail	Last lines	tail -n 5 file.txt
wc	Count lines and words	wc -l file.txt
grep	Search text	grep "ERROR" log.txt
find	Search files/directories	find . -type f
sort	Sort text	sort fruits.txt
chmod	Change permissions	chmod +x run.sh
history	Command history	history
clear	Clear terminal	clear
man	Manual pages	man ls
🏁 Conclusion

During this laboratory, I learned how to use essential Linux commands and manage files and directories through the terminal.

I also practiced working with text files, searching for information, managing directory structures, and understanding basic file permissions.

These exercises provided a practical introduction to Linux and the command-line environment.

<div align="center">

🐧 END OF LAB 01

Linux & Shell — Practical Learning

Prepared by Nizar Babai

</div>
