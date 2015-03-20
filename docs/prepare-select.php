<h1>PrepareSelect</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
void PrepareSelect ( string col [, bool off = false] [, string ass = null] )
</pre>
Подготавливает выбор из Базы данных указанного поля.<br />
<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">col</h3><span class="paragraph">Поле из которого будут выбранны данные из Базы Данных</span>
<h3 class="perem">off</h3><span class="paragraph"><b><font color="red">!!!Не меняйте этот параметр, если не знаете, что делаете!!!</font></b></span><br />
<span class="paragraph">Отключение экранирования</span>
<h3 class="perem">ass</h3><span class="paragraph"><b><font color="red">!!!Не меняйте этот параметр, если не знаете, что делаете!!!</font></b></span><br />
<span class="paragraph">Переменная в которую записывается значение "известен так-же"</span>
<br />
<h2>Пример:</h2><hr />
<pre class="brush: csharp;">
using KilleR.MySqli;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            MySqli Test = new MySqli("127.0.0.1", "root", "", "mysql");
            Test.PrepareSelect("test");
            Dictionary&lt;int, Dictionary&lt;string, string&gt;&gt; vals = Test.Select("test");
            foreach (KeyValuePair&lt;int, Dictionary&lt;string, string&gt;&gt; datas in vals) {
                foreach (KeyValuePair&lt;string, string&gt; data in datas.Value) {
                    Console.WriteLine(data.Key + " = " + data.Value);
                }
            }
            Console.ReadLine();
        }
    }
}
</pre>