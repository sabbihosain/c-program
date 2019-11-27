#include <stdio.h>
int main()
{
  int i,size=5,pos,value;
  int a[10]={1,2,3,4,5};
  scanf("%d",&pos);
  scanf("%d",&value);
  for(i=pos; i<=size; i++)
  {
    a[i]=a[i];
  }
  a[pos]=value;
   for(i=0; i<size; i++)
   {
      printf("%d ",a[i]);
   }
  return 0;
}

