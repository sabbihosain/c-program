#include <stdio.h>
int main()
{
  int i,j,n=5,temp;
  int a[]={4,6,8,5,3};
  for(i=0; i<n; i++)
  {
    for(j=0; j<n; j++)
    {
      if(a[j]<a[j+1])
      {
        temp=a[j];
        a[j]=a[j+1];
        a[j+1]=temp;
      }
    }
  }
  for(j=0; j<n; j++)
  {
      printf("%d ",a[j]);
  }

  return 0;
}

