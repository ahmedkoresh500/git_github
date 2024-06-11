<?php
/*
    * this lesson:
        1- deleting one or more commits =>> through reset the head.
        2- [head] =>> pointer that points at last commit.
    
    * [git log]             =>> to show commits history
    * [git reflog]          =>> to show commit history
    
    =>> to exit log screen:
        * [q]or[wq]
    
    cd /c/xampp/htdocs/my_github/project-3dos
    
    * touch good.txt
    * touch middle.txt
    * touch bad.txt
    
    * git add good.txt
    * git commit -m "the good commit"
    * git push origin main
    
    * git add middle.txt
    * git commit -m "the middle commit"
    * git push origin main
    
    * git add bad.txt
    * git commit -m "the bad commit"
    * git push origin main
    
    * git reset --hard 3976d78ce2737060677c57b935cadce9d8071b2b  =>> to reset the head on cmder program at good commit.
                                                                    =>> deleting middle commit.
                                                                    =>> deleting bad commit.
    
* git push origin main --force          =>> to reset the head on github [remote repo]
                                        =>> [-f] = [--force]
                                        =>> [--f] != [--force]
*/
?>