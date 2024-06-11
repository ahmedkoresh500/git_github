<?php

/*
    * note: 
        [git init] for inner directory 
        [git init] for outer directory.
        [git add .] for outer directory
        [inner directory] won't be staged.

        * to exit unix window:
            [1][ESC]   [2][:wq]or[:wq!]   [3][enter]

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