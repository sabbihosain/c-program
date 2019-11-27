#include <stdio.h>
int main()
{
  int i,n=5,temp,search;
  int a[]={4,6,8,5,3};
  scanf("%d",&search);
  for(i=0; i<n; i++)
  {
    if(a[i]==search)
    {
      printf("%d",search);
    }
  }
  return 0;
}

