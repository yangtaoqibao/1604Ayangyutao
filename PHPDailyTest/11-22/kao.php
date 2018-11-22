<?php
/*
*根据题目描述，走格时只能向下走或向右走。则假若目标格为（n，m），那么走向目标节点的走法就有两种，分别是：
  （1）由（n-1，m）格向下走
  （2）由（n，m-1）格向右走
所以，对与边界的格子来说，都只有上述的这两种走法，所以走向（n,m)格的总走法数目，就是【其上方格点的走法数目】与【其左方格点的走法数目】的和。此时假设函数f(x,y)表示走向格点(x,y)的走法数目，那么能够得到：
f(x,y)=f(x−1,y)+f(x,y−1)
*
* */

function findSolution($X,$Y) {
    if ($X == 0 && $Y == 0)
        return 0;
    if ($X == 0 || $Y == 0) {
        return 1;
    }
    return findSolution($X-1, $Y) + findSolution($X, $Y-1);
}
//echo findSolution(4,5);


function main() {
$x=0;
$y=0;
    cin >> $x >> $y;
    if ($x > 10 || $x < 1 || $y > 10 || $y < 1) {
        cout << "input errer." << endl;
        return 0;
    }
    $ans = findSolution($x, $y);
    cout << $ans << endl;
    return 0;
}
echo findSolution(4,5);