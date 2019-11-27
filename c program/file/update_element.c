#include <stdio.h>
int main()
{
    int i,j,n=5,pos,value;
    int a[]={6,4,8,7,2};
    scanf("%d",&pos);
    scanf("%d",&value);
    for(i=pos; i<n; i++)
    {
       a[i]=a[i];
    }
    a[pos]=value;
    for(i=0; i<n; i++)
    {
       printf("%d ",a[i]);
    }
    return 0;
}

