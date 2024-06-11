<?php
/*
    * [git branch]                      =>> to display [all local branches] for this repo
    * [git branch scroll]               =>> [1] to create new branch [scroll] =>> [no switch]
    
    * [git checkout scroll]             =>> to switch to [scroll branch]
    * [git checkout master]             =>> to switch to [master branch]
    
    * [git checkout -b main]            =>> [1] to create new branch [main] =>> and switch.
    
    * [git branch -d branchName]        =>> [d small]   =>> [safe delete].
                                        =>> [D capital] =>> [no safe delete].
    
    * [git branch -m newName]           =>> to rename [current branch]
    
    
    =>> [EX]: make a commit [main branch] =>> merge with [master branch]  =>> before push  =>> compared to [lesson 6]
    =>> main branch:
    * git checkout main
    * touch index.html
    * git add index.html
    * git commit -m "testing main branch"

    =>> master branch:
    * git checkout master
    * git merge main    =>> make a commit [main branch] =>> merge with [master branch]  =>> before push
    
*/
?>