#include <stdio.h>
int main()
{
  int i,j,sum,k;
  int a[2][2]={5,4,4,4};
   int b[2][2]={6,7,4,8};
   int c[2][2];
  printf("Matrix a is:\n");
  for(i=0; i<2; i++){
    for(j=0; j<2; j++){
        printf("\t\t%d\t",a[i][j]);
    }
    printf("\n");
  }
  printf("Matrix b is:\n");
  for(i=0; i<2; i++){
    for(j=0; j<2; j++){
        printf("\t\t%d\t",b[i][j]);
    }
    printf("\n");
  }

  printf("Matrix a*b is:");
  for(i=0; i<2; i++){
    for(j=0; j<2; j++){
            sum=0;
     for(k=0; k<2; k++){
        sum=sum+a[i][k]*b[k][j];
        c[i][j]=sum;
        printf("\t\t%d\t",c[i][j]);
     }
     printf("\n");
  }
  }
  getch();
  return 0;
}

