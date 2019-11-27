#include <stdio.h>
int main()
{
    char str[]={1,2,3,4,5};
    int i,n=5,total=0;
    //scanf("%s",str);
    for(i=0; i<n; i++)
    {
     total+=str[i];
    }

    printf("%d",total);
    return 0;
}

