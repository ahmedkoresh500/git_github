<?php

/*
    * note: [git init] for a directory inside [git init] for the upper directory
        =>> [git add .] won't be done for the inner directory.

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
*/

?>