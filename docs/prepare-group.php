<h1>PrepareGroup</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
void PrepareGroup ( string groups )
</pre>
Подготавливает группировку данных в Базе данных по-определённому значению.<br />
<span class="paragraph"><font color="red"><b>!!!ВНИМАНИЕ!!!</b></font> Группировка работает только для выбора данных из базы данных и применяется только при подготовке выборки данных и внешне вмешаться не получится!</span><br />
<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">groups</h3>
<span class="paragraph">Поле по-которому будет произведена группировка данных в Базе Данных</span><br />
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
            Test.PrepareGroup("uid");
            Dictionary&lt;int, Dictionary&lt;string, string&gt;&gt; vals = Test.Select("test");
            for(int i=0;i&lt;vals.Count;i++) {
                 foreach(KeyValuePair&lt;string, string&gt; data in vals[i]) {
                     Console.WriteLine(data.Key + " = " + data.Value);
                 }
            }
            Console.ReadLine();
        }
    }
}
</pre>