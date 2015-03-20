<h1>ReturnSelect</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
List&lt;string&gt; ReturnSelect ( string col [, bool off = false] [, string ass = null] )
</pre>
Возвращает подготовленный к выбору из Базы данных <a href="https://msdn.microsoft.com/ru-ru/library/6sh2ey19(v=vs.110).aspx" target="_blank">список</a> необходимых полей.<br />
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
            List&lt;string&gt; = Test.ReturnSelect("test");
            Console.WriteLine(String.Join("&#59;&#92;n", tests.ToArray()));
            Console.ReadLine();
        }
    }
}
</pre>