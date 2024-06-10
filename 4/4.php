<?php

/*
    * note: 
        [1] [git init] for a directory inside another directory has [git init].
            =>> [git add .] won't be done for the inner directory.

        [2] to exit unix window:
            =>> [ESC] -> [:wq] or [:wq!] -> [enter]

    * remote repo = global repo = github.
    * local repo = local branch = branch.

    * [untracked files] in [working directory] -> [stage area] -> [local repo] -> [remote repo = github].
    
    
    [1] [git status]                =>> [untracked files] in [working directory].
    
    * [git add .]                   =>> [untracked files] in [working directory] -> [stage area]
    * [git add *]                   =>> [untracked files] in [working directory] -> [stage area]
    * [git add css/main.css index.html osama.rts]
                                    =>> [specific untracked file] in [working directory] -> [stage area].
    
    [2] [git status]                =>> files in [stage area].
    
    * [git reset head osama.rts]    =>> files in [stage area] back to [working directory].
    
    * [git commit -m""]             =>> files in [stage area] -> [local repo].
                                    =>> [-m"aa"]  =>> message with the commit
    
    [3] [git status]                =>> files in [local repo].



    * If you have a local clone, you can update it by running the following commands.
    * git branch -m main master]
    * [git fetch origin]
    * [git branch -u origin/master master]
    * [git remote set-head origin -a]
*/

?>