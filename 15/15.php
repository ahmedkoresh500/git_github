<?php
/*
    * [git reset head]      =>> 3 are the same  =>> files in [stage area] -> [working directory]
    * [git reset head .]    =>> 3 are the same  =>> files in [stage area] -> [working directory]
    * [git reset head *]    =>> 3 are the same  =>> files in [stage area] -> [working directory]
    
    * git reset head hello.html         =>> specific file in [stage area] -> [working directory].
    
    * [git add .]                       =>> [untracked files] in [working directory] -> [stage area]
    * [git add *]                       =>> [untracked files] in [working directory] -> [stage area]
    * [git add]                         =>> command not found
    
    * git restore --staged                              =>> syntax error.
    
    * [git restore --staged .]          =>> two are the same
    * [git restore --staged *           =>> two are the same =>> to unstage all files one time.
    
    * git restore --staged hello.html   =>> to unstage this file.
    
    * code hello.html                   =>> to open this untracked file on vs code editor.
    
    * then right click on the file in vs code then choose:
            =>> stage changes   = adding this file to stage area.
            =>> unstage changes = to unstage this file.

    * git clean -n                      =>> to delete unstaged files with test msg.
    * git clean -f                      =>> to delete unstaged files.

    =>> [--force] = [-f].
    
    * stashing files before deleting it =>> i can get it out of stash box.
*/
?>