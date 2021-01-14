# Webinar - IVR con esteroides en Asterisk

![iPERFEX](https://www.iperfex.com/wp-content/uploads/2019/01/iPerfex_logo_naranja-e1546949425459.png)


![webinar](https://raw.githubusercontent.com/iperfex-team/webinar_irv_con_esteroides_en_asterisk/main/webinar_ivr_con_esteroides_en_asterisk.png)

Webinar hands-on de cómo desarrollar aplicaciones a través del dialplan de Asterisk con FastAGI. Se mostrará además un ejemplo práctico de cómo desarrollar un IVR utilizando FASTAGI.

Para ellos vamos a utilizar :
- La distro Issabel (issabel.org), con su motor de PBX Asterisk y que tendrá un deploy en una maquina virtual. Issabel nos permite interconectarnos con la PSTN, registrar troncales, internos (anexos) con softphones o webphones, etc.

- Contenedor Docker en Debian con FASTAGI,  que permite la comunicación con sistemas terceros en forma directa. Con FASTAGI el proceso se establece a través de una conexión TCP/IP y de esta forma es posible liberar los recursos de la máquina Asterisk (Issabel) de forma bastante eficiente.

Nota: La diferencia entre AGI (Asterisk Gateway Interface, sirve de pasarela entre los distintos lenguajes de programación y Asterisk) y FASTAGI es que el proceso se ejecuta en otra maquina o contenedor a través de comunicaciones TCP/IP, liberando los recursos que son cruciales para IVRs o aplicaciones que tengan muchos impactos.


Lord BaseX (c) 2014-2020
 Federico Pereira <fpereira@iperfex.com>

Material del Webinar.

[WIKI DEL WEBINAR](https://github.com/iperfex-team/webinar_irv_con_esteroides_en_asterisk/wiki)

[PRESENTACIÓN POWERPOINT](https://github.com/iperfex-team/webinar_irv_con_esteroides_en_asterisk/raw/main/IVR_CON_ESTEROIDES_EN_ASTERISK-14-01-2021.pptx)

## CLONE
```
cd /root
git clone https://github.com/iperfex-team/webinar_irv_con_esteroides_en_asterisk.git
cd /root/webinar_irv_con_esteroides_en_asterisk/
```
