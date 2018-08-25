n=int(input("enter no people to be married\n"))
mlist=input("enter names of men\n").split()
mp=[]
wp=[]
wlist=input("enter names of women\n").split()
for i in range(0,n):
    print("for man ",i)
    mp.append(input("enter preference of man\n").split())
for l in range(0,n):
    wp.append(input("enter preference of woman\n").split())
#count prferece
while n!=0:
  counte=[]   
  for j in range(0,n):
       for c in range(0,n):
            counte.append(0)
       for k in range(0,n):
            if(mlist[j] in wp[k][0]):
              counte[j]=counte[j]+1
  maxmp=counte.index(max(counte))
  print("likely to be married ",mlist[maxmp],mp[maxmp][0])
#remove married from preference list
  marriedm=mlist[maxmp]
  marriedw=mp[maxmp][0]
  for r in range(0,n):
      mp[r].remove(marriedw)
      wp[r].remove(marriedm)
  n=n-1    
  mp.pop(maxmp)
  mlist.pop(maxmp)
  wlist.remove(marriedw)

