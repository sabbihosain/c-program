#include <stdio.h>
int main()
{
   char ch;
   int num1,num2;
   printf("enter an operator(+,-,*,\): ");
   scanf("%c",&ch);
   printf("enter 1st num: ");
   scanf("%d",&num1);
   printf("enter 2nd num: ");
   scanf("%d",&num2);

   switch(ch)
   {
     case '+':
     printf("%d+%d=%d",num1,num2,num1+num2);
     break;
     case '-':
     printf("%d-%d=%d",num1,num2,num1-num2);
     break;
     case '*':
     printf("%d*%d=%d",num1,num2,num1*num2);
     break;
     case '/':
     printf("%d/%d=%d",num1,num2,num1/num2);
     break;
     case '%':
     printf("%d % %d=%d",num1,num2,num1%num2);
     break;
     default:
     printf("no operation");
     break;
   }
  return 0;
}

