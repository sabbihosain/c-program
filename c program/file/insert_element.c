#include <stdio.h>
int main()
{
    int i,j,n=5,pos,value;
    int a[10]={6,4,8,7,2};
    scanf("%d",&pos);
    scanf("%d",&value);
    for(i=n; i>=pos; i--)
    {
       a[i]=a[i-1];
    }
    a[pos-1]=value;
    for(i=0; i<n+1; i++)
    {
       printf("%d ",a[i]);
    }
    return 0;
}

