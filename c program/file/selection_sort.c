#include <stdio.h>
int main()
{
    int i,j,n=5,temp,index_min;
    int a[]={6,4,8,7,2};
    for(i=0; i<n; i++)
    {
       index_min=i;
       for(j=i+1; j<n; j++)
       {
           if(a[j]<a[index_min])
           {
              index_min=j;
           }
       }
       if(index_min!=i)
       {
         temp=a[i];
         a[i]=a[index_min];
         a[index_min]=temp;
       }
    }
    for(i=0; i<n; i++)
    {
       printf("%d ",a[i]);
    }
    return 0;
}

