#include <stdio.h>
int main()
{
   int input,palindome_num;
   scanf("%d",&input);
   palindome_num=palindome(input);
   if(palindome_num==input)
   {
        printf("%d palindom number",palindome_num);

   }else{
           printf("%d not palindom number",palindome_num);
   }
  return 0;
}
int palindome(int input)
{
   int palin_num=0,rem;
   //scanf("%d",&num);
   while(input!=0)
   {
     rem=input%10;
     palin_num=palin_num+(rem*rem*rem);
     input/=10;
   }
   return palin_num;
}
