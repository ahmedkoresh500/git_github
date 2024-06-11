<?php
/*
    * [git add]                         =>> command not found
    * [git add .]                       =>> [untracked files] in [working directory] -> [stage area]
    * [git add *]                       =>> [untracked files] in [working directory] -> [stage area]

    * [git reset head]      =>> 3 are the same  =>> files in [stage area] -> [working directory]
    * [git reset head .]    =>> 3 are the same  =>> files in [stage area] -> [working directory]
    * [git reset head *]    =>> 3 are the same  =>> files in [stage area] -> [working directory]
    * [git reset head hello.html]               =>> specific file in [stage area] -> [working directory].
    
    * [git restore --staged]            =>> command not found
    * [git restore --staged .]          =>> files in [stage area] -> [working directory] =>> two are the same
    * [git restore --staged *]          =>> files in [stage area] -> [working directory] =>> two are the same
    * [git restore --staged hello.html] =>> specific file in [stage area] -> [working directory]
    
    * code hello.html                   =>> open with [vscode editor]
    
    =>> file right click in [vscode editor]:
            =>> stage changes   =>> [working directory] -> [stage area]
            =>> unstage changes =>> [stage area] -> [working directory]

    * git clean -f                      =>> delete [untracked files]
    * git clean -n                      =>> delete [untracked files] with [test msg]  =>> not working

    =>> [-f] = [--force]
    
    * [git clean -f]
    * files in [stash box]      =>> not deleted
*/
?>