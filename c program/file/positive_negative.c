#include <stdio.h>
int main()
{
   int num;
   scanf("%d",&num);
   if(0<num)
   {
     printf("positive number%d",num);
   }
   else if(0>num)
   {
     printf("negative number%d",num);
   }
   else{
     printf("enter 0: %d",num);
   }
  return 0;
}

