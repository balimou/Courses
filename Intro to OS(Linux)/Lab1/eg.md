Linux & Shell Lab 1

Student: Nizar Babai

Part 1: Basic Linux Commands
bash
whoami
date
echo hello linux
clear
pwd
ls
ls -l
ls -a
ls -h
clear

Part 2: Navigation and Directories
bash
cd ~
pwd
ls
ls -l
ls -a
mkdir test
cd test
pwd
cd ..
pwd
cd ~
mkdir lab1
cd lab1
mkdir photos docs

Part 3: Creating, Copying and Moving Files
bash
touch notes.txt
cp notes.txt docs
mv docs/notes.txt docs/lesson.txt
ls -R
mkdir lab2
cd ~/lab2
touch a.txt

Part 4: Working with Files and Text
bash
echo "hi" > a.txt
echo "bye" >> a.txt
cat a.txt
ls *.txt
grep -c "ERROR" log.txt
find ~/lab2 -type d
sort fruits.txt

Part 5: Working with Logs
bash
cd ~
mkdir lab3
cd lab3

printf "INFO start\nERROR disk\nINFO login\nERROR net\n" > log.txt

cat log.txt
echo "hi" > a.txt
echo "bye" >> a.txt
cat a.txt

grep -c "ERROR" log.txt
chmod +x run.sh
./run.sh
ls /etc | wc -l

Part 6: File Management
bash
cd ~
mkdir lab1
cd lab1

mkdir photos docs
touch docs/notes.txt docs/todo.txt

ls docs
cp docs/notes.txt docs/notes_backup.txt
mv docs/todo.txt docs/tasks.txt
ls docs

rm docs/notes_backup.txt
rmdir photos

mkdir -p project/src project/data
ls -R project

Part 7: Reading and Editing Files
bash
cd ~/lab1/docs

echo "Linux is fun" > notes.txt
cat notes.txt

echo "Second line" >> notes.txt
echo "Third line" >> notes.txt

cat notes.txt
wc -l notes.txt
head -n 1 notes.txt
tail -n 1 notes.txt

echo "Oops" > notes.txt
cat notes.txt

nano notes.txt

Part 8: About Me File
bash
touch about_me.txt

echo "Nizar Babai" > about_me.txt
echo "Djamaa" >> about_me.txt
echo "Analyse" >> about_me.txt

cat about_me.txt
wc -l about_me.txt

Part 9: Linux Help Commands
bash
ls --help
man ls
history

Part 10: School Directory Exercise
bash
cd ~

mkdir -p school/math school/physics

touch school/readme.txt
touch school/math/exercises.txt
touch school/physics/formulas.txt

cp school/readme.txt school/readme_backup.txt
mv school/readme_backup.txt school/old_readme.txt

cat school/readme.txt
cat school/old_readme.txt
cat school/math/exercises.txt

ls -R school

rm school/old_readme.txt

mkdir school/chemistry
mv school/physics/formulas.txt school/chemistry/

ls -R school

Part 11: Library Directory Exercise
Creating Directories
bash
cd ~

mkdir -p library/books library/movies library/music
ls -R library

Creating Files
bash
touch library/books/books.txt
touch library/movies/movies.txt
touch library/music/music.txt

Adding Books
bash
echo "Atomic Habits" > library/books/books.txt
echo "The Alchemist" >> library/books/books.txt
echo "Rich Dad Poor Dad" >> library/books/books.txt

cat library/books/books.txt

Adding Movies
bash
echo "CREED1" > library/movies/movies.txt
echo "CREED2" >> library/movies/movies.txt
echo "CREED3" >> library/movies/movies.txt

cat library/movies/movies.txt

Adding Music
bash
echo "Song One" > library/music/music.txt
echo "Song Two" >> library/music/music.txt
echo "Song Three" >> library/music/music.txt

cat library/music/music.txt

Creating About File
bash
touch library/about.txt

echo "Nizar Babai" > library/about.txt
echo "Group 3" >> library/about.txt
date >> library/about.txt

cat library/about.txt

Copying
