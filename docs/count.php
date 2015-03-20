<h1>Count</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
int Count ( [string table, [List&lt;string&gt; cols = null, List&lt;string&gt; where = null]] )
</pre>
Возвращает количество записей из Базы данных<br />
<span class="paragraph"><u>Согласно <a href="https://msdn.microsoft.com/ru-ru/library/vstudio/ms229029%28v=vs.100%29.aspx" target="_blank">перегрузке</a> метод может и вовсе не содержать параметров. Тогда результатом - будет количество данных последней выборки</span><br />
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
            Console.WriteLine(Convert.ToInt32(Test.Count("test", cols, wher)));
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
            Console.WriteLine(Convert.ToInt32(Test.Count("test", cols, wher)));
            Console.ReadLine();
        }
    }
}
</pre>