
; <<>> DiG 9.3.6-P1-RedHat-9.3.6-16.P1.el5 <<>> @192.52.178.30 ns2.xd33.com
; (1 server found)
;; global options:  printcmd
;; Got answer:
;; ->>HEADER<<- opcode: QUERY, status: NOERROR, id: 43531
;; flags: qr rd; QUERY: 1, ANSWER: 0, AUTHORITY: 2, ADDITIONAL: 2

;; QUESTION SECTION:
;ns2.xd33.com.			IN	A

;; AUTHORITY SECTION:
xd33.com.		172800	IN	NS	ns1.xd33.com.
xd33.com.		172800	IN	NS	ns2.xd33.com.

;; ADDITIONAL SECTION:
ns1.xd33.com.		172800	IN	A	67.19.22.194
ns2.xd33.com.		172800	IN	A	67.19.22.195

;; Query time: 133 msec
;; SERVER: 192.52.178.30#53(192.52.178.30)
;; WHEN: Sat Jun 11 15:20:29 2011
;; MSG SIZE  rcvd: 94

