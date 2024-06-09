<?php
/*
    revision:
        * mkdir                         =>> to make directory.
        * touch                         =>> to create file.
        * cd ..                         =>> to back-up [one step] [one directory] [the parent directory].
        * clear                         =>> to clear gitbash window.
    
    * [touch .gitignore]                =>> to create [.gitignore] file.
                                        =>> [files], [folders] written inside [.gitignore] file 
                                        =>> [ignored = hidden] =>> not staged =>> not commited.
    
    * [code .gitignore]                 =>> to open this file by vscode editor.
    
    * touch vip.log
    * git st                        =>> [vip.log] not ignored =>> because [!vip.log] written in .gitignore.
    
    * mkdir node_packs
    * cd node_packs/
    * touch hello.php
    * cd ..
    * git st                        =>> [node_packs] ignored =>> because [node_packs/] written in .gitignore.
    
                                    =>> i can ignore .gitignore file itself.
                                    =>> [git st] not equal to [ls].

    * git add --force text.txt      =>> [working directory] -> [stage area] although ignoring it.
    * git add -f text.txt           =>> [working directory] -> [stage area] although ignoring it.
    
*/
?>