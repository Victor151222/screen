(function (root, factory) {if (typeof define === 'function' && define.amd) {define(['exports', 'echarts'], factory);} else if (typeof exports === 'object' && typeof exports.nodeName !== 'string') {factory(exports, require('echarts'));} else {factory({}, root.echarts);}}(this, function (exports, echarts) {var log = function (msg) {if (typeof console !== 'undefined') {console && console.error && console.error(msg);}};if (!echarts) {log('ECharts is not Loaded');return;}if (!echarts.registerMap) {log('ECharts Map is not loaded');return;}echarts.registerMap('wangzhou', {"type":"FeatureCollection","features":[{"type":"Feature","id":"500238","properties":{"name":"巫溪县","cp":[109.628912,31.3966],"childNum":1},"geometry":{"type":"Polygon","coordinates":["@@FC@@D@DABADCB@BAFAB@BCHED@BADAF@FAD@D@D@FDHFFBHBH@BBDBDBJ@JCBAFAJAD@HBL@JDFB@@DAD@JABA@@BA@CBC@C@CBAH@HAD@BABABCBCB@FBB@BADAB@F@NBD@B@BAB@BC@A@CCCGG@@@A@@BA@@BABA@CBC@C@A@A@C@CBCFCDEFEBC@A@ABA@@AA@AAEAC@CBC@A@A@A@E@G@EEG@C@@@ABAHCDEBAHGBCDCBCDCDAJABAB@BC@AAA@@GAGAEAG@CAA@AA@A@@@A@E@E@EAE@@BA@ABABA@A@AAAE@OCKEECAEAGAA@@ACAA@@EE@@@A@ALGFEHCF@F@D@JB@@F@D@B@D@B@DBFAB@B@DBFBB@D@DAD@F@J@DBB@BBF@D@B@DA@@DGDEBAB@B@D@B@JFNHJFHFF@HBD@F@D@F@D@HCJADCJGB@BADCDCDMBCDAFCJ@B@FAFADABAHGDAJCH@H@H@LBD@JBB@@@H@JAD@DADABCBEBADCFABABA@AB@D@D@F@BBFBD@D@F@D@D@DBFBDDDBFBB@BAB@@AEAAAAAAACCAAKEICAAACAG@ACCEAE@CAECIGAC@A@A@A@@BCBAAGCI@AAGAE@A@ADGBCBC@CAACGA@@A@ABIBGBE@@AA@AA@AAACAE@CAGEICC@ACCACACCG@ACAAAEACAI@M@A@A@CB@@EA@@C@C@G@C@CAG@@AC@CAC@A@CAA@GAMCMEC@A@GDIBEBEBC@GBA@A@@A@A@@CBE@CBAAAAECECGAC@GCCAGAA@E@G@A@A@AA@C@EBC@A@AAAEC@C@A@AA@GBC@E@@@@A@G@A@AAAAAKGCCA@C@C@CBCBEFEBCBE@CAE@@@CBA@E@EBABC@CAEEGCCEACAGAA@@AA@A@@@A@A@@BEBA@CAAECAC@AAE@CBEDI@C@@@A@@@A@ABA@@@AAA@@@A@ABA@A@@@AA@A@A@CA@BC@CBA@CBA@A@@BC@A@AAC@@ACCCAAAC@A@C@A@E@C@C@C@C@A@C@@@A@A@CAAAA@C@A@ABA@@B@@@B@BBB@BBB@BA@@@A@AAC@AAA@A@A@@BA@@BAD@BA@AB@@ABABABA@ABABA@@@A@AAA@@AAA@A@A@C@@AAA@@@A@AAICCA@CCAA@A@G@GAG@AA@ABGBC@AA@A@E@CC@CA@ACEECGCK@ABCF@BA@A@@@AE@C@C@EAC@C@C@ECIGMKCECC@@A@C@A@EAABAFABADABC@C@E@A@C@E@E@CBCDC@E@C@KCGAEACECGC@E@C@AB@@A@@@Q@@BABADAB@@I@CBGBE@Q@K@EAEACAA@@@A@A@@@@AA@A@AAA@@@@A@A@C@@AC@A@A@AA@@AA@CAC@@@IGA@A@A@@@AB@B@DABAD@@CBCBEBEBC@CDCBA@A@@@CAAAC@CACAC@G@E@CBC@@@ABCBAB@BAB@@AB@@@BBDB@@@@B@B@B@B@@@BAB@B@BB@@@@B@B@@@BAB@BAB@FABAB@@CBGDCBABAB@B@F@B@BBD@B@BA@ABA@M@M@M@ABCB@BAB@B@@B@F@BB@@BB@B@BADABABA@E@A@C@ABA@CBABCBCBCDABADELELAFAD@J@FAPAH@DA@@BG@EBC@@@C@@AGDGBA@C@A@GDC@A@AAA@A@C@ODA@CDA@@BA@CAA@A@@B@BGBCBGBC@WBA@EBC@AACAIGA@@@C@GHEBA@C@EAKEA@C@CBIDGBA@C@CAA@K@I@C@IBA@CBABK@E@K@GBA@CBABCBA@GAE@C@E@EBIDGBC@C@GCMGE@AAC@EBIDCBA@G@C@IDCB@@EAGCC@ECAAA@G@GAABA@IDKBOBIBE@A@EFABCBEBA@C@A@ABEBC@KBIBE@GBCBEDGFC@A@AAC@CCCAECA@ABCD@@@B@BC@E@A@EAEAA@C@A@A@A@AACBGBC@@@ABADADABABA@AAGEEAA@C@CBE@CBAA@CAA@@EAC@E@A@CBA@@DABC@A@ECGAA@A@AAAACEAA@A@C@E@AA@A@@@DADA@@FABA@ABA@A@AAC@AAA@A@@@AAA@CBC@A@ABA@@@A@@@A@A@ABA@A@C@C@AAACAEACA@@A@AB@BQB@BA@A@A@A@A@ABABADA@A@GBK@GBGBA@C@C@E@C@CB@@AB@F@@BDAB@@CBA@CBA@A@C@C@AB@@AB@B@BBDBF@D@BADAB@BB@@@B@@@HBFBBBBB@@@BABABEBA@EHCD@@@B@BEDCBA@ABA@G@CBGDKFABCD@B@B@BBBBDHDDB@BFHHH@B@B@B@DABABA@A@CAEBABIFEDA@C@A@ABGDIDIDIBQBGB@BABABCBA@C@EACAE@A@A@AB@@@D@@CHCDABA@C@ABA@ADABKBGDA@C@A@CDIFA@A@A@@@A@DDBB@B@BABADIHCD@B@D@D@BDH@@BB@@@B@D@BADABCDAB@D@B@BB@@@D@BBFBBBB@@@BABAF@HAD@H@BBB@DBDAFAFCB@B@@BB@@BHBVFH@@@DAD@F@FABBDBBFDJBTBH@@@FFHFLDHBBBB@@B@B@HB@@BD@BHB@@D@B@DB@BBD@B@FHRBD@FBDBBBB@BB@HAHAB@D@D@B@B@B@D@BD@B@B@@B@F@JEB@F@BAB@BAD@@BB@B@@BDBDBH@@@FBDBDDFFBDDHDD@BHDJFJJFDDBBADABA@@FBB@DBDBBB@BBDAF@DAB@BED@@CBA@@@A@@BAB@D@@@BBBBB@BDBBDBB@B@DAH@D@BBD@@DDBBBB@BCD@B@BFFFB@@@D@@ABBB@BB@B@FBNAD@B@@EBE@AB@BAB@D@J@X@B@FBD@BBDBBB@DBBBBBBD@DBB@@@B@AACCAC@@@A@ABAB@B@NAJ@RAP@L@F@DBD@DDDB@BBDAHAF@DBBBDB@DBB@DB@B@@@DCBABA@@B@@EP@@BDDBBBF@D@D@D@PBT@F@JAD@B@DB@BBB@BB@DBF@DBBBBD@BDBB@D@B@@BB@@DBBB@DADADABAJAD@L@DAB@BA@@HBB@B@B@@ABABAD@B@D@B@DBBB@B@@DBF@PAH@B@B@DDHDDDF@BBD@FALAFADA@ABABE@@BAD@BABCB@@@B@BFDDDBB@BBBAF@JEHAB@DB@@DCF@B@B@DDB@D@B@BA@AB@F@H@D@F@DAB@BCB@HAPCBA@A@@D@@BBD@BBDAB@DABABCDABAB@@@DDFFL@F@D@DAFAD@B@@BBB@@@BABAB@HCD@HAJCJAD@H@F@B@HAFCB@B@D@@BJ@DBBAD@@@DBD@B@B@BABALCDCF@HAN@RAJAX@P@VAFBH@B@NATCH@FAJBB@D@DDD@J@N@HBD@BBBB@@BBAF@BDF@BDBB@BBBAB@DAB@FBHBD@F@DABBB@@BD@DBL@F@BAB@@AB@@C@@BCBA@AB@BAHBPA@@BBB@@B@FBB@@B@D@J@F@HBDAFALCBAB@DB@@BDB@F@BBH@LDHDB@B@B@DAB@B@DBHBLDLFB@@@FBB@B@BAHCFADAF@F@B@BBDBD@DBB@B@BADAD@@@"],"encodeOffsets":[[112216,32489]]}}],"UTF8Encoding":true});}));