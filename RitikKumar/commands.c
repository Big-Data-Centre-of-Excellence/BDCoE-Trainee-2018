some terminal commands

pwd-present working directory

ls-to know what files are in the directory

cd .. - to go to the previous directory

cd . - to be on the present directory

cd- to go on the home

mkdir- to create or make a new directory

rmdir- to remove a particular empty directory

rm- to delete files and directories

touch- to create an empty file

man- to know about a particular command

--help- displays the commands

cp- to copy files to another directory

mv- to move files to another directory

locate- to get the location of a particular directory

echo- helps to move some data usually text to an already existing file

cat-displays the content of a file

nano,vi&jed- nano and vi are already installed text editors in the command line

sudo- (SuperUserDo) if you want any command to be with administrative or root privileges

df- to see rhe available disk space in each of the partitions 

du- to know the disk usage of a file in your system

tar- to compress or uncompress a zipped file

zip&unzip- to compress into a zip file or unzip to extract files from a zip archive file

apt-get- to install packages or to upgrade

chmod- to make a file executable

hostname- to know your name in your network

ping- to check your connection to your network 


#######
ls [option(s)] [file(s)]

    If you run ls without any additional parameters, the program will list the contents of the current directory in short form.

    -l

        detailed list
    -a

        displays hidden files

cp [option(s)] sourcefile targetfile

    Copies sourcefile to targetfile.

    -i

        Waits for confirmation, if necessary, before an existing targetfile is overwritten
    -r

        Copies recursively (includes subdirectories)

mv [option(s)] sourcefile targetfile

    Copies sourcefile to targetfile then deletes the original sourcefile.

    -b

        Creates a backup copy of the sourcefile before moving
    -i

        Waits for confirmation, if necessary, before an existing targetfile is overwritten

rm [option(s)] file(s)

    Removes the specified files from the file system. Directories are not removed by rm unless the option -r is used.

    -r

        Deletes any existing subdirectories
    -i

        Waits for confirmation before deleting each file.

ln [option(s)] sourcefile targetfile

    Creates an internal link from the sourcefile to the targetfile, under a different name. Normally, such a link points directly to the sourcefile on one and the same file system. However, if ln is executed with the -s option, it creates a symbolic link that only points to the directory where the sourcefile is located, thus enabling linking across file systems.

    -s

        Creates a symbolic link

cd [options(s)] [directory]

    Changes the current directory. cd without any parameters changes to the user's home directory.
mkdir [option(s)] directoryname

    Creates a new directory.
rmdir [option(s)] directoryname

    Deletes the specified directory, provided it is already empty.
chown [option(s)] username.group file(s)

    Transfers the ownership of a file to the user with the specified user name.

    -R

        Changes files and directories in all subdirectories.

chgrp [option(s)] groupname file(s)

    Transfers the group ownership of a given file to the group with the specified group name. The file owner can only change group ownership if a member of both the existing and the new group.
chmod [options] mode file(s)

    Changes the access permissions.

    The mode parameter has three parts: group, access, and access type. group accepts the following characters:

    u

        user
    g

        group
    o

        others
