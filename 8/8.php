<?php

/*
    * create [public key]:
    
    * some details:
    [1] [ssh]               =>> secure shell
    [2] [-keygen]           =>> key generation
    [3] [-t]                =>> type of algorithm to generate the key
                            =>> most famous 3:
                            [1] [rsa]       =>> [rivest], [shamir], [adleman]
                            [2] [dsa]       =>> digital signature algorithm
                            [3] [ecdsa]     =>> elliptic curve digital signature algorithm

    [4] [-b]                =>> number of bits
    [5] [-C]                =>> mail            =>> must be uppercase

    =>> in [cmd program]:
    * [ssh-keygen -t rsa -b 4096 -C "ahmedkoresh500@gmail.com"]     =>> two are the same
    * [ssh-keygen]                                                  =>> two are the same
    * enter [file name]  =>> which in public key saved
    * enter [password] [confirm password]


    =>> [file name] must be empty
    =>> [file name] not empty
        [1] file created in this repo
        [2] [public key] saved in two files:
            [a] /c/users/Ahmed Korrish/.ssh/id_rsa.pub      =>> [id_rsa.pub] never changes
            [b] in this repo [my_public_key.pub]
        [3] when testing [public key] in cmd program    =>> test fails


    * cat ~/.ssh/id_rsa.pub     =>> to display [id_rsa.pub] content = public key    =>> then copy
    
    * in github:
        [1] press [settings]
        [2] press [SSH and GPG keys]
        [3] press [new SSH key]
        [4] paste [public key] + [write new title]
        [5] press [add SSH key]
    
    =>> test [public key] in cmd program:    
    [1] [ssh -T git@github.com]
    [2] enter password
    [3] [hello message] appears
*/

?>