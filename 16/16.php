<?php
/*
        * reset [head] pointer =>> at specific commit [older commit]
        * result =>> [newest commits] will be deleted
    
    * [git log]             =>> to display commits history
    * [git reflog]          =>> to display commits history
    * [q]or[wq]             =>> to exit [log screen]
    
    * [cd /c/xampp/htdocs/my_github/project-3dos]
    
    * [touch good.txt]                          =>> create [good.txt] file
    * [touch middle.txt]                        =>> create [middle.txt] file
    * [touch bad.txt]                           =>> create [bad.txt] file
    
    * [git add good.txt]
    * [git commit -m "(good.txt file) commit"]      =>> [1] [good.txt] file
    * [git push origin main]
    
    * [git add middle.txt]
    * [git commit -m "(middle.txt file) commit"]    =>> [2] [middle.txt] file
    * [git push origin main]
    
    * [git add bad.txt]
    * [git commit -m "(bad.txt file) commit"]       =>> [3] [bad.txt] file
    * [git push origin main]
    
    * git reset --hard (commit ID)          =>> reset [head] pointer =>> at specific commit [older commit]
                                            =>> result =>> [newest commits] will be deleted
    
    * git push -f origin master             =>> reset [head] pointer =>> in github [remote repo]
    * git push --force origin master        =>> reset [head] pointer =>> in github [remote repo]

    * [-f] = [--force]
    * [--f]                                 =>> command not found
*/
?>