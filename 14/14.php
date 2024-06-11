<?php
/*
    * [git checkout] = [git status]
    * [git checkout main]         =>> to switch to [main branch]

    =>> git stash:
    * index [0, 1, 2, 3, 4]
    * 0  =>> newest stash
    * 4  =>> oldest stash
    
    =>> git stash           =>> to execute  =>> files in [stage area]       =>> [best case]
    =>> git stash pop       =>> to execute  =>> no [untracked files]    =>> or commited to [local repo]
                            =>> [last in]->[first out] = index [0] =>> pop one index only

    * touch JS
    * nano JS
    * git add JS
    * git stash             =>> stash files in [stage area] -> [stash box] from [git], [windows]
                            =>> not through [view -> hidden]

    * nano TS                           =>> [file content] can't be empty
    * git add TS
    * git stash save "TS file"          =>> stash files with [text msg]
    ** git stash list
    
    * touch AJAX
    * git add AJAX
    * git stash                         =>> stash files in [stash box]
    
    * git stash pop     =>> unstash files from [stash box] -> [stage area] =>> and deleting it's index
    * git stash apply   =>> unstash files from [stash box] -> [stage area] =>> not deleting it's index
    
    * [git stash apply stash@{1}]
    * [git stash]                       =>> [new stash index] =>> same content in [old stash index]

    * ls                                =>> to display [files and folders] in this repo
    
    * git stash pop stash@{1}           =>> unstash files from [stash box] =>> [specific index] and deleting it's index.
    * git stash apply stash@{1}         =>> unstash files from [stash box] =>> [specific index] not deleting it's index. 
    
    * git stash drop                    =>> delete [newest stash index] with content
    * git stash drop stash@{1}          =>> delete [specific stash index] with content
    * git stash clear                   =>> delete [all stash indexes] with content
    
    ** git stash show                   =>> to display [newest stash index] with content    [index 0]
    ** git stash show stash@{1}         =>> to display [specific stash index] with content
    
    * H.W [Home Work] =>> make a branch from specific stash?
*/
?>