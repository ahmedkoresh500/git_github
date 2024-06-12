<?php
/*
    =>> lesson [.gitignore]:
        * [files], [folders] written inside [.gitignore] file
        * [not staged] [not committed]

    * note:
        =>> [*.log]             =>> to ignore all files [end with] [.log]
        =>> [!vip.log]          =>> not ignore [this file]
    
    * touch vip.log             =>> not ignore [this file]  =>> [!vip.log] -> [.gitignore] file
    * mkdir node_packs          =>> ignore [this folder] =>> [node_packs/] -> [.gitignore] file
    * cd node_packs/
    * touch hello.php
    * cd ..
    
    * [touch .gitignore]        =>> to create new file.    
    * [code .gitignore]         =>> open with [vscode editor]
    
    * [git st]                =>> [untracked files] [working directory]
    * [ls]                    =>> to list all [files] and [folders] in this directory
    
    =>> we can ignore [.gitignore] file itself  =>> in one case
    =>> [.gitignore file]  =>> not commited or pushed before

    * git add -f text.txt       =>> [untracked file][working directory] -> [stage area] although ignored
    * git add --force text.txt  =>> [untracked file][working directory] -> [stage area] although ignored
*/
?>