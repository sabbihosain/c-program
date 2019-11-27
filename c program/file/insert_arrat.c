#include <stdio.h>
int main()
{
  int i,size,pos,value;
  int a[10]={1,2,3,4,5};
 scanf("%d",&size);
 for(i=0; i<size; i++)
  {
  scanf("%d",&a[i]);
 }
  scanf("%d",&pos);
  scanf("%d",&value);
  for(i=size; i>=pos; i--)
  {
    a[i]=a[i-1];
  }
  a[pos]=value;
   for(i=0; i<size+1; i++)
   {
      printf("%d ",a[i]);
   }
  return 0;
}

