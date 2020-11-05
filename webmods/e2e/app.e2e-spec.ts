import { WebmodsPage } from './app.po';

describe('webmods App', function() {
  let page: WebmodsPage;

  beforeEach(() => {
    page = new WebmodsPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
