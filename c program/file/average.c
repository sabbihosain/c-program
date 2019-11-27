#include <stdio.h>
int main()
{
    char str[]={1,2,3,4,5};
    int i,n=5,avg,total=0;
    //scanf("%s",str);
    for(i=0; i<n; i++)
    {
     total+=str[i];
    }
     avg=total/n;
    printf("%d",avg);
    return 0;
}

