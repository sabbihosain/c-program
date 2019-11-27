#include <stdio.h>
int main()
{
    int n,r,s;
    scanf("%d %d",&n,&r);
    s=npr(n,r);
    printf("%d",s);
    return 0;
}

int npr(int n,int r)
{
    int s=1,i;
    for(i=0; i<=r-1; i++)
    {
      s=s*(n-i);
    }
    return s;
}
