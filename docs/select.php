<h1>Select</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
Dictionary&lt;int, Dictionary&lt;string, string&gt;&gt; Select ( string table, [List&lt;string&gt; cols, List&lt;string&gt; where] )
</pre>
Возвращает данные полученные из Базы данных в <a href="https://msdn.microsoft.com/ru-ru/library/xfhwa508%28v=vs.110%29.aspx" target="_blank">Ассоциативном массиве</a>.<br />
<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">table</h3><span class="paragraph">Название таблицы в Базе Данных</span>
<h3 class="perem">cols</h3><span class="paragraph"><font color="red"><b>Не обязательно к заполнению</b></font></span><br/><span class="paragraph">Переменная в которой хранятся подготовленные к <a href="index.php?page=prepare-select">выборке</a> поля</span>
<h3 class="perem">where</h3><span class="paragraph"><font color="red"><b>Не обязательно к заполнению</b></font></span><br/><span class="paragraph">Переменная в которой хранятся подготовленные <a href="index.php?page=prepare-where">условия</a> выбора</span>
<br />
<h2>Примеры:</h2><hr />
<pre class="brush: csharp;">
using KilleR.MySqli;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            MySqli Test = new MySqli("127.0.0.1", "root", "", "mysql");
            List&lt;string&gt; cols = Test.ReturnSelect("test");
            List&lt;string&gt; wher = Test.ReturnWhere("test", 11);
            Dictionary&lt;int, Dictionary&lt;string, string&gt;&gt; vals = Test.Select("test", cols, wher);
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
<hr />
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
            Test.PrepareWhere("test", 11);
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