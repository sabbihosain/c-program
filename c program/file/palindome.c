#include <stdio.h>
int main()
{
   int num,count=0,i;
   scanf("%d",&num);
   for(i=2; i<num; i++)
   {
     if(num%2==0)
     {
       count++;
       break;
     }
   }
   if(count==0)
   {
        printf("%d prime number",num);

   }else{
           printf("%d not a prime number",num);
   }
  return 0;
}
