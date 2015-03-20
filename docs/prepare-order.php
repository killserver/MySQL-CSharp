<h1>PrepareOrders</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
void PrepareOrders ( string order_by, Orders order_sort )
</pre>
Подготавливает сортировку данных в Базе данных по-определённому значению.<br />
<span class="paragraph"><font color="red"><b>!!!ВНИМАНИЕ!!!</b></font> Сортировка работает только для выбора данных из базы данных и применяется только при подготовке выборки данных и внешне вмешаться не получится!</span><br />
<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">order_by</h3><span class="paragraph">Поле по-которому будет отсортированны данные в Базе Данных</span>
<h3 class="perem">MySqli.Orders</h3><span class="paragraph">MySqli.Orders.ORDER_ASC - Сортировка от меньшего к большему</span><br />
<span class="paragraph">MySqli.Orders.ORDER_DESC - Сортировка от большего к меньшему</span><br />
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
            Test.PrepareOrders("uid", MySqli.Orders.ORDER_DESC);
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