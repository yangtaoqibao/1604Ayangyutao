<?php
/**
 * Created by PhpStorm.
 * User: 杨雨涛
 * Date: 2018/11/16
 * Time: 8:23
 */




//
//    function asd($str){
//     $mp=0;
//     for($i=0;$i<$str.length();++$i) $mp[$str[$i]]++;
//     for($i=0;$i<$str.length();++$i){
//         if($mp[$str[$i]]==1)
//             return $i;
//
//     }
//     return -1;
//    }
//    echo asd('fafdasfdsfsdfdsfdasfadsf');
//
//
//
//
//
//    function zxc($str){
//    $len=$str.length();
//    if($len==0) return -1;
//    for($i=0;$i<$len;$i++){
//        for($j=0;$j<$len;$j++){
//            if($str[$i]==$str[$j] && $i!=$j){
//                break;
//            }
//            if($i!=$j && $str[$i] != $str[$j]){
//                if($j==$len-1)
//                    return $i;
//                else
//                    continue;
//            }
//        }
//    }
//    return -1;
//}
//echo zxc("dfadsfadsfadf");



function first($str){
    $sr=chunk_split($str,1,',');
    $sr=rtrim($sr,',');
    $arr=explode(',',$sr);
    $cnt=array_count_values($arr);
    foreach ($cnt as $key=>$val){
        if($val==1){
            return stripos($str,$key);
        }
    }
    return -1;
}
echo first('ffafadfadasdadf');







//int FirstNotRepeatingChar(string str) {
//    if(str.empty())
//        return -1;
//    int* hashTable = new int[256];
//    for(int i = 0;i<256;++i)
//        {
//            hashTable[i] = 0;
//        }
//        for(int i = 0;i<str.length();++i)
//        {
//            ++hashTable[str[i]];
//        }
//        for(int i = 0;i<str.length();++i)
//        {
//            if(hashTable[str[i]] == 1)
//                return i;
//        }
//
//        return -1;
//
//    }




//void findFirstCharInStr(char *str){
//    if(str==NULL||str==""){//先验证字符串是否有效
//        return;
//    }
//
//    int i=0;
//    int len=0;
//    while(str[i]!='\0'){
//        if(!('A'<=str[i]&&str[i]<='Z')){//检查字符串是不是全部由大写字符构成
//            return;
//        }
//        len++;
//        i++;
//    }
//    //count[26]:用来保存26个大写字母在字符串中出现的次数,并先初始化为零
//    int count[26];
//
//    for(int i=0;i<26;i++){
//    count[i]=0;
//}
//    //将整个字符串中出现的字符的次数进行统计
//    for(int i=0;i<len;i++){
//    count[str[i]-'A'] ++;
//}
//    //找到第一个出现一次的字符的下标
//    for(int j=0;j<len;j++){
//
//    if(count[str[j]-'A']==1){//若找到，则输出下标，并返回
//        printf("%d\n",j);
//        return;
//    }
//}
//    printf("-1\n");//若没有找到，则输出：-1
//}
