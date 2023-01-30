import heater
import thermometer as ther
import google_sheets as gs
import time
import datetime
import humidifier

t_upflag=True
t_downflag=True
h_upflag=True
h_downflag=True
flag=True
while(1): 
    loca=gs.gSheet()
    if(loca=='enter'):
        f = open('log.txt', 'a', encoding='UTF-8')
        f.write(str(datetime.datetime.now())+' enter\n')
        f.close()
        while(not(gs.gSheet()=='exit')):
            temp=ther.temp()
            hum=ther.hum()
            dt_now = datetime.datetime.now()

            if (temp<=19 and t_downflag==True):
                heater.on()
                t_downflag=False
                t_upflag=True
            elif (temp>=20 and t_upflag==True):
                heater.off()
                t_downflag=True
                t_upflag=False
            
            if(hum<=55 and h_downflag==True):
                humidifier.on()
                h_downflag=False
                h_upflag=True
            elif (hum>=60 and h_upflag==True):
                humidifier.off()
                h_downflag=True
                h_upflag=False

            if(loca=='exit' ):
                heater.off()
                flag=True
                f = open('log.txt', 'a', encoding='UTF-8')
                f.write(str(datetime.datetime.now())+' exit\n')
                f.close()
                break
            time.sleep(30)
        
    if(loca=='exit' and flag==True):
        heater.off()
        flag=False
        f = open('log.txt', 'a', encoding='UTF-8')
        f.write(str(datetime.datetime.now())+' exit\n')
        f.close()

    time.sleep(2)
    
