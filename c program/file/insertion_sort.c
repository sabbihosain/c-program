#include <stdio.h>
int main()
{
    int i,j,n=5,item;
    int a[]={5,8,3,7,4};
    for(i=1; i<n; i++)
    {
        item=a[i];
        j=i-1;
    while(j>=0&&a[j]>item)
    {
        a[j+1]=a[j];
        j=j-1;
    }
    a[j+1]=item;
    }
    for(j=0; j<n; j++)
    {
      printf("%d ",a[j]);
    }
    return 0;
}

